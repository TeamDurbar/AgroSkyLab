package durbar.agroskylab.fragment;

import android.app.Fragment;
import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListView;
import android.widget.Toast;

import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.VolleyLog;
import com.android.volley.toolbox.JsonArrayRequest;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

import durbar.agroskylab.R;
import durbar.agroskylab.adapter.NewsFeedAdapter;
import durbar.agroskylab.adapter.SoilAdapter;
import durbar.agroskylab.constant.Constatns;
import durbar.agroskylab.controller.Controller;
import durbar.agroskylab.model.NewsFeed;
import durbar.agroskylab.model.Soil;

/**
 * Created by Osman Goni Nahid on 4/23/2016.
 */
public class HistoryFragment extends Fragment {
    SoilAdapter adapter;
    ProgressDialog mProgressDialog;
    List<Soil> soilList;
    ListView lv;
    Comparator comparator;

    public HistoryFragment() {
        // Required empty public constructor
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_history, container, false);
        lv = (ListView) rootView.findViewById(R.id.historyListView);
        new DownloadFeed().execute();
        return rootView;
    }

    private class DownloadFeed extends AsyncTask<Void, Void, Void> {

        @Override
        protected void onPreExecute() {
            super.onPreExecute();
            mProgressDialog = new ProgressDialog(getActivity());
            mProgressDialog.setMessage("Loading...");
            mProgressDialog.setIndeterminate(false);
            mProgressDialog.setCancelable(false);
            mProgressDialog.show();
        }

        @Override
        protected Void doInBackground(Void... params) {

            soilList = new ArrayList<Soil>();
            JsonArrayRequest request = new JsonArrayRequest(Constatns.SOIL_HISTORY_URL,
                    new Response.Listener<JSONArray>() {
                        @Override
                        public void onResponse(JSONArray response) {
                            Log.d("soil", response.toString());

                            try {
                                for (int i = 0; i < response.length(); i++) {
                                    JSONObject news = response.getJSONObject(i);
                                    String id = news.getString("location_id");
                                    String device_id = news.getString("device_id");
                                    String date = news.getString("date");
                                    String url = news.getString("url");
                                    String cloud_score = news.getString("cloud_score");
                                    String iron = news.getString("iron");
                                    String zink = news.getString("zinc");
                                    String copper = news.getString("copper");
                                    String manganese = news.getString("manganese");
                                    String lead = news.getString("lead");
                                    String nickel = news.getString("nickel");
                                    String arsenic = news.getString("arsenic");
                                    String cadmium = news.getString("cadmium");
                                    Soil soil = new Soil(id, device_id, date, url, cloud_score, iron, zink, copper, manganese, lead, nickel, arsenic, cadmium);
                                    soilList.add(soil);
                                }
                                adapter = new SoilAdapter(getActivity(), soilList);
                                lv.setAdapter(adapter);
                                mProgressDialog.dismiss();

                            } catch (JSONException e) {
                                e.printStackTrace();

                            }
                        }
                    }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    VolleyLog.d("", "Error: " + error.getMessage());
                    Toast.makeText(getActivity(),
                            error.getMessage(), Toast.LENGTH_LONG).show();
                }
            });
            Controller.getInstance().addToRequestQueue(request);
            return null;
        }

        @Override
        protected void onPostExecute(Void args) {

        }
    }

    @Override
    public void onDetach() {
        super.onDetach();
    }

}
