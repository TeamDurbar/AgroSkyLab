package durbar.agroskylab.subfragment;

import android.app.Fragment;
import android.content.Context;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.List;

import durbar.agroskylab.R;
import durbar.agroskylab.adapter.CropSuggestionAdapter;
import durbar.agroskylab.model.Crop;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class AppropriateCropFragment extends Fragment {
    List<Crop> cropList;
    ListView cropListView;
    CropSuggestionAdapter adapter;


    public AppropriateCropFragment() {
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        cropList = new ArrayList<Crop>();
    }

    @Override
    public void onAttach(Context context) {
        super.onAttach(context);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_crop_suggestion, container, false);
        cropListView = (ListView) view.findViewById(R.id.cropSuggestionListViw);
        fetchData();
        adapter = new CropSuggestionAdapter(getActivity(), cropList);
        cropListView.setAdapter(adapter);
        return view;
    }

    private void fetchData() {
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
        cropList.add(new Crop("Wheat", "cereal crops"));
    }

    @Override
    public void onDetach() {
        super.onDetach();
    }
}
