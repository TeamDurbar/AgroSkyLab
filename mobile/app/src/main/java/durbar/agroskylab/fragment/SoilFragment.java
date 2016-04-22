package durbar.agroskylab.fragment;

import android.app.Fragment;
import android.graphics.Color;
import android.os.Bundle;
import android.support.design.widget.TabLayout;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import durbar.agroskylab.R;
import durbar.agroskylab.subfragment.DemoFragment;
import durbar.agroskylab.subfragment.EssentialElementsOfSoinlFragment;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class SoilFragment extends Fragment {
    public SoilFragment() {
        // Required empty public constructor
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_soil, container, false);
        TabLayout tabLayout = (TabLayout) view.findViewById(R.id.tabLayout);
        tabLayout.setTabTextColors(Color.WHITE, R.color.accent_material_dark);
        tabLayout.setTabGravity(TabLayout.GRAVITY_FILL);
        tabLayout.addTab(tabLayout.newTab().setText("Types of Soil"));
        tabLayout.addTab(tabLayout.newTab().setText("Quantity of Essential Elements"));
        tabLayout.addTab(tabLayout.newTab().setText("Water Capacity"));
        tabLayout.addTab(tabLayout.newTab().setText("Temparature"));
        tabLayout.addTab(tabLayout.newTab().setText("Toxxic Material"));
        getFragmentManager().beginTransaction().replace(R.id.frLayout, new EssentialElementsOfSoinlFragment()).commit();
        tabLayout.setOnTabSelectedListener(new TabLayout.OnTabSelectedListener() {
            @Override
            public void onTabSelected(TabLayout.Tab tab) {
                if (tab.getPosition() == 0) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new EssentialElementsOfSoinlFragment()).commit();
                    //tab.setText(R.string.audio);
                } else if (tab.getPosition() == 1) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new DemoFragment()).commit();
                    // tab.setText(R.string.video);
                } else if (tab.getPosition() == 2) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new DemoFragment()).commit();
                    // tab.setText(R.string.video);
                } else if (tab.getPosition() == 3) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new DemoFragment()).commit();
                    // tab.setText(R.string.video);
                } else if (tab.getPosition() == 4) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new DemoFragment()).commit();
                    // tab.setText(R.string.video);
                }

            }

            @Override
            public void onTabUnselected(TabLayout.Tab tab) {

            }

            @Override
            public void onTabReselected(TabLayout.Tab tab) {

            }
        });
        return view;
    }

    @Override
    public void onDetach() {
        super.onDetach();
    }
}
