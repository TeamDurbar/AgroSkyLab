package durbar.agroskylab.subfragment;

import android.app.Fragment;
import android.graphics.Color;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import org.eazegraph.lib.charts.PieChart;
import org.eazegraph.lib.communication.IOnItemFocusChangedListener;
import org.eazegraph.lib.models.PieModel;

import durbar.agroskylab.R;
import durbar.agroskylab.fragment.ChartFragment;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class EssentialElementsOfSoinlFragment extends ChartFragment {
    public EssentialElementsOfSoinlFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_ess_element_soil, container, false);
        mPieChart = (PieChart) view.findViewById(R.id.piechart);
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
