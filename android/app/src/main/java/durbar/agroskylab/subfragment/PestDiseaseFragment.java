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
import durbar.agroskylab.adapter.LeafImpactAdapter;
import durbar.agroskylab.adapter.PestImpactAdapter;
import durbar.agroskylab.model.CropDiseases;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class PestDiseaseFragment extends Fragment {

    List<CropDiseases> cropDiseasesList;
    ListView cropDiseaseListView;
    PestImpactAdapter adapter;


    public PestDiseaseFragment() {
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        cropDiseasesList = new ArrayList<CropDiseases>();
    }

    @Override
    public void onAttach(Context context) {
        super.onAttach(context);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_disease_pest, container, false);
        cropDiseaseListView = (ListView) view.findViewById(R.id.pestImpactListView);
        fetchData();
        adapter = new PestImpactAdapter(getActivity(), cropDiseasesList);
        cropDiseaseListView.setAdapter(adapter);
        return view;
    }

    private void fetchData() {
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
        cropDiseasesList.add(new CropDiseases("Rice", "Humocdia", "dfjal fjdka f fjla dfakdfj afjkjadsl fdkaf "));
    }

    @Override
    public void onDetach() {
        super.onDetach();
    }
}
