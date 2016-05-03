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
import durbar.agroskylab.model.Crop;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class CropSuggestionAdapter extends BaseAdapter {
    private Context context;
    private List<Crop> cropList;

    public CropSuggestionAdapter(Context context, List<Crop> cropList) {
        this.context = context;
        this.cropList = cropList;
    }

    @Override
    public int getCount() {
        return cropList.size();
    }

    @Override
    public Object getItem(int position) {
        return cropList.get(position);
    }

    @Override
    public long getItemId(int position) {
        return cropList.get(position).getId();
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View view = convertView;
        if (convertView == null) {
            view = LayoutInflater.from(context).inflate(R.layout.crop_suggestion_row, parent, false);
        }
        TextView txtCropName = (TextView) view.findViewById(R.id.cropName);
        TextView txtDiseaseName = (TextView) view.findViewById(R.id.diseaseName);
        ImageView imgDisease = (ImageView) view.findViewById(R.id.diseaseImageView);
        if (cropList.get(position).getName().equals("Wheat")) {
            imgDisease.setImageResource(R.drawable.wheat);
        } else {
            imgDisease.setImageResource(R.drawable.rye);
        }
        txtCropName.setText(cropList.get(position).getName());
        txtDiseaseName.setText(cropList.get(position).getType());
        return view;
    }
}
