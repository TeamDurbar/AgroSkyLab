package durbar.agroskylab.model;

/**
 * Created by Osman Goni Nahid on 9/30/2015.
 */
public class NewsFeed {
    private int id;
    private String news_title;
    private String news_details;
    private String news_date;
    private String news_thumbnail;

    public NewsFeed(int id, String news_title, String news_details, String news_date, String news_thumbnail) {
        this.id = id;
        this.news_title = news_title;
        this.news_details = news_details;
        this.news_date = news_date;
        this.news_thumbnail = news_thumbnail;
    }

    public NewsFeed(String news_title, String news_details, String news_date, String news_thumbnail) {
        this.news_title = news_title;
        this.news_details = news_details;
        this.news_date = news_date;
        this.news_thumbnail = news_thumbnail;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNews_thumbnail() {
        return news_thumbnail;
    }

    public void setNews_thumbnail(String news_thumbnail) {
        this.news_thumbnail = news_thumbnail;
    }

    public String getNews_title() {
        return news_title;
    }

    public void setNews_title(String news_title) {
        this.news_title = news_title;
    }

    public String getNews_details() {
        return news_details;
    }

    public void setNews_details(String news_details) {
        this.news_details = news_details;
    }

    public String getNews_date() {
        return news_date;
    }

    public void setNews_date(String news_date) {
        this.news_date = news_date;
    }


}
