package durbar.agroskylab.adapter;

import android.app.Activity;
import android.content.Context;
import android.graphics.Typeface;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;


import com.squareup.picasso.Picasso;

import java.util.List;

import durbar.agroskylab.R;
import durbar.agroskylab.model.NewsFeed;

/**
 * Created by Osman Goni Nahid on 9/30/2015.
 */
public class NewsFeedAdapter extends RecyclerView.Adapter<NewsFeedAdapter.NewsViewHolder> {
    List<NewsFeed> newsFeeds;
    Typeface font;
    private Context context;

    public NewsFeedAdapter(List<NewsFeed> newsFeeds,Context context) {
        this.newsFeeds = newsFeeds;
        this.context=context;
    }

    @Override
    public NewsViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View v = LayoutInflater.from(parent.getContext()).inflate(R.layout.news_row, parent, false);
        font = Typeface.createFromAsset(parent.getContext().getAssets(), "RobotoLight.ttf");
        NewsViewHolder pvh = new NewsViewHolder(v);
        return pvh;
    }

    @Override
    public void onBindViewHolder(NewsViewHolder holder, int position) {

        String title = newsFeeds.get(position).getNews_title();
        holder.news_title.setText(title);
        holder.news_title.setTypeface(font);
        holder.news_details.setText(newsFeeds.get(position).getNews_details());
        holder.news_details.setTypeface(font);
        holder.news_date.setText(newsFeeds.get(position).getNews_date());
        holder.news_date.setTypeface(font);
        Picasso.with(this.context).load(newsFeeds.get(position).getNews_thumbnail()).into(holder.image_view);


    }

    @Override
    public int getItemCount() {
        return newsFeeds.size();
    }

    @Override
    public void onAttachedToRecyclerView(RecyclerView recyclerView) {
        super.onAttachedToRecyclerView(recyclerView);
    }

    public static class NewsViewHolder extends RecyclerView.ViewHolder {
        CardView cv;
        TextView news_title;
        TextView news_details;
        TextView news_date;
        ImageView image_view;


        NewsViewHolder(View itemView) {
            super(itemView);
            cv = (CardView) itemView.findViewById(R.id.cv);
            image_view = (ImageView) itemView.findViewById(R.id.image_view);
            news_title = (TextView) itemView.findViewById(R.id.news_title);
            news_details = (TextView) itemView.findViewById(R.id.news_details);
            news_date = (TextView) itemView.findViewById(R.id.news_date);
        }
    }
}
