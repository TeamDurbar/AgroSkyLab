package durbar.agroskylab.fragment;

import android.app.Fragment;
import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
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
import durbar.agroskylab.constant.Constatns;
import durbar.agroskylab.controller.Controller;
import durbar.agroskylab.model.NewsFeed;

/**
 * Created by Osman Goni Nahid on 9/30/2015.
 */
public class NewsFeedFragment extends Fragment {
    private static String TAG = NewsFeedFragment.class.getSimpleName();
    NewsFeedAdapter adapter;
    ProgressDialog mProgressDialog;
    List<NewsFeed> newsFeedList;
    RecyclerView rv;
    Comparator comparator;

    public NewsFeedFragment() {
        // Required empty public constructor
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        comparator = Collections.reverseOrder();
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_news_feed, container, false);
        rv = (RecyclerView) rootView.findViewById(R.id.rv);
        rv.setHasFixedSize(true);
        LinearLayoutManager llm = new LinearLayoutManager(getActivity());
        rv.setLayoutManager(llm);
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

            newsFeedList = new ArrayList<NewsFeed>();
            JsonArrayRequest request = new JsonArrayRequest(Constatns.NEWS_FEED_URL,
                    new Response.Listener<JSONArray>() {
                        @Override
                        public void onResponse(JSONArray response) {
                            Log.d(TAG, response.toString());

                            try {
                                for (int i = 0; i < response.length(); i++) {
                                    JSONObject news = response.getJSONObject(i);
                                    int news_id = news.getInt("id");
                                    String news_title = news.getString("title");
                                    String news_date = news.getString("contain");
                                    String news_details = news.getString("date");
                                    String news_thumbnail = news.getString("image");
                                    NewsFeed newsFeed = new NewsFeed(news_id, news_title, news_details, news_date, news_thumbnail);
                                    newsFeedList.add(newsFeed);
                                }
                                adapter = new NewsFeedAdapter(newsFeedList, getActivity());
                                rv.setAdapter(adapter);
                                mProgressDialog.dismiss();

                            } catch (JSONException e) {
                                e.printStackTrace();

                            }
                        }
                    }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    VolleyLog.d(TAG, "Error: " + error.getMessage());
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