package durbar.agroskylab.fragment;

import android.app.Fragment;
import android.content.Context;
import android.graphics.Color;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.design.widget.TabLayout;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import durbar.agroskylab.R;
import durbar.agroskylab.subfragment.AppropriateCropFragment;
import durbar.agroskylab.subfragment.InAppropriateCropFragment;
import durbar.agroskylab.subfragment.LeafDiseaseFragemnt;
import durbar.agroskylab.subfragment.PestDiseaseFragment;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class CropSuggestionFragment extends Fragment {
    public CropSuggestionFragment() {
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
        View view = inflater.inflate(R.layout.crop_suggestion_fragment, container, false);
        TabLayout tabLayout = (TabLayout) view.findViewById(R.id.tabLayout);
        tabLayout.setTabTextColors(Color.WHITE, R.color.accent_material_dark);
        tabLayout.setTabGravity(TabLayout.GRAVITY_FILL);
        tabLayout.addTab(tabLayout.newTab().setText("Appropriate Crops"));
        tabLayout.addTab(tabLayout.newTab().setText("Inapproriate Crops"));
        getFragmentManager().beginTransaction().replace(R.id.frLayout, new AppropriateCropFragment()).commit();
        tabLayout.setOnTabSelectedListener(new TabLayout.OnTabSelectedListener() {
            @Override
            public void onTabSelected(TabLayout.Tab tab) {
                if (tab.getPosition() == 0) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new AppropriateCropFragment()).commit();
                    //tab.setText(R.string.audio);
                } else if (tab.getPosition() == 1) {
                    getFragmentManager().beginTransaction().replace(R.id.frLayout, new InAppropriateCropFragment()).commit();
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
