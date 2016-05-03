package durbar.agroskylab.adapter;

import android.content.Context;
import android.graphics.Typeface;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import java.util.List;

import durbar.agroskylab.R;
import durbar.agroskylab.model.NewsFeed;
import durbar.agroskylab.model.Soil;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class SoilAdapter extends BaseAdapter {
    Context context;
    List<Soil> soilList;

    public SoilAdapter(Context context, List<Soil> soilList) {
        this.context = context;
        this.soilList = soilList;
    }

    @Override
    public int getCount() {
        return soilList.size();
    }

    @Override
    public Object getItem(int position) {
        return soilList.get(position);
    }

    @Override
    public long getItemId(int position) {
        return Long.parseLong(soilList.get(position).getId());
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        View view = convertView;
        if (convertView == null) {
            view = LayoutInflater.from(context).inflate(R.layout.history_row, parent, false);
        }
        TextView txtDate = (TextView) view.findViewById(R.id.date);
        TextView txtIron = (TextView) view.findViewById(R.id.iron);
        TextView txtZink = (TextView) view.findViewById(R.id.zink);
        TextView txtCopper = (TextView) view.findViewById(R.id.copper);
        TextView txtManganese = (TextView) view.findViewById(R.id.manganese);
        ImageView imgDisease = (ImageView) view.findViewById(R.id.thumb);
        Picasso.with(this.context).load(soilList.get(position).getUrl()).into(imgDisease);
        txtDate.setText("Date :" + soilList.get(position).getDate());
        txtIron.setText("Iron :" + soilList.get(position).getIron());
        txtZink.setText("Zink :"+soilList.get(position).getZink());
        txtCopper.setText("Copper :" + soilList.get(position).getCopper());
        txtManganese.setText("Manganize :" + soilList.get(position).getManganize());
        return view;
    }
}
