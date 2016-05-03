package durbar.agroskylab.fragment;

import android.app.Fragment;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.TabLayout;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import org.eazegraph.lib.charts.PieChart;
import org.eazegraph.lib.communication.IOnItemFocusChangedListener;
import org.eazegraph.lib.models.PieModel;

import durbar.agroskylab.R;
import durbar.agroskylab.SoilDetailsActivity;
import durbar.agroskylab.UserRequestActivity;
import durbar.agroskylab.subfragment.DemoFragment;
import durbar.agroskylab.subfragment.EssentialElementsOfSoinlFragment;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class SoilFragment extends ChartFragment {
    Button buttonMoreDetails;
    FloatingActionButton fab;

    public SoilFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             final Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_soil, container, false);
        mPieChart = (PieChart) view.findViewById(R.id.piechart);
        fab = (FloatingActionButton) view.findViewById(R.id.fab);
        buttonMoreDetails = (Button) view.findViewById(R.id.buttonMoreDetails);
        buttonMoreDetails.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getActivity().getApplicationContext(), SoilDetailsActivity.class));
            }
        });
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getActivity().getApplicationContext(), UserRequestActivity.class));
                getActivity().finish();
            }
        });
        loadData();
        return view;
    }

    @Override
    public void onResume() {
        super.onResume();
        mPieChart.startAnimation();
    }

    @Override
    public void restartAnimation() {
        mPieChart.startAnimation();
    }

    @Override
    public void onReset() {

    }

    private void loadData() {
        mPieChart.addPieSlice(new PieModel("Zink", 15, Color.parseColor("#FE6DA8")));
        mPieChart.addPieSlice(new PieModel("Potasium", 25, Color.parseColor("#56B7F1")));
        mPieChart.addPieSlice(new PieModel("Iron", 35, Color.parseColor("#CDA67F")));
        mPieChart.addPieSlice(new PieModel("Salphar", 9, Color.parseColor("#FED70E")));
        mPieChart.setOnItemFocusChangedListener(new IOnItemFocusChangedListener() {
            @Override
            public void onItemFocusChanged(int _Position) {
//                Log.d("PieChart", "Position: " + _Position);
            }
        });
    }

    private PieChart mPieChart;
}
