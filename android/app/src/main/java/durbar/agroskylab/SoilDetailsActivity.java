package durbar.agroskylab;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.ListViewCompat;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

import durbar.agroskylab.adapter.SoilAdapter;
import durbar.agroskylab.model.Soil;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class SoilDetailsActivity extends AppCompatActivity {
    ListView soilListView;
    List<Soil> soilList;
    SoilAdapter adapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_soil_details);
//        getFragmentManager().beginTransaction().replace(R.id.fl, barCodeFragment).commit();
    }
}
