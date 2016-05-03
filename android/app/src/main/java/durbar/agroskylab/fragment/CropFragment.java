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
import durbar.agroskylab.subfragment.LeafDiseaseFragemnt;
import durbar.agroskylab.subfragment.PestDiseaseFragment;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class CropFragment extends Fragment {
    public CropFragment() {
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
        View view = inflater.inflate(R.layout.fragment_crops, container, false);
        TabLayout tabLayout = (TabLayout) view.findViewById(R.id.tabLayout);
        tabLayout.setTabTextColors(Color.WHITE, R.color.accent_material_dark);
        tabLayout.setTabGravity(TabLayout.GRAVITY_FILL);
        tabLayout.addTab(tabLayout.newTab().setText("Leaf Impact"));
        tabLayout.addTab(tabLayout.newTab().setText("Pest Attack"));
        getFragmentManager().beginTransaction().replace(R.id.frLayout, new LeafDiseaseFragemnt()).commit();
        tabLayout.setOnTabSelectedListener(new TabLayout.OnTabSelectedListener() {
            @Override
            public void onTabSelected(TabLayout.Tab tab) {
                if (tab.getPosition() == 0) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new LeafDiseaseFragemnt()).commit();
                    //tab.setText(R.string.audio);
                } else if (tab.getPosition() == 1) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new PestDiseaseFragment()).commit();
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
