package durbar.agroskylab.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

import durbar.agroskylab.R;
import durbar.agroskylab.model.CropDiseases;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class PestImpactAdapter extends BaseAdapter {
    private Context context;
    private List<CropDiseases> diseasesList;

    public PestImpactAdapter(Context context, List<CropDiseases> diseasesList) {
        this.context = context;
        this.diseasesList = diseasesList;
    }

    @Override
    public int getCount() {
        return diseasesList.size();
    }

    @Override
    public Object getItem(int position) {
        return diseasesList.get(position);
    }

    @Override
    public long getItemId(int position) {
        return diseasesList.get(position).getId();
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View view = convertView;
        if (convertView == null) {
            view = LayoutInflater.from(context).inflate(R.layout.pest_impact_row, parent, false);
        }
        TextView txtCropName = (TextView) view.findViewById(R.id.cropName);
        TextView txtDiseaseName = (TextView) view.findViewById(R.id.diseaseName);
        ImageView imgDisease = (ImageView) view.findViewById(R.id.diseaseImageView);
        imgDisease.setImageResource(R.drawable.disease2);
        txtCropName.setText(diseasesList.get(position).getCropName());
        txtDiseaseName.setText(diseasesList.get(position).getDiseasesType());
        return view;
    }
}
