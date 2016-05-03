package durbar.agroskylab.model;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class Soil {
    private String id;
    private String device_id;
    private String date;
    private String url;
    private String cloud_source;
    private String iron;
    private String zink;
    private String copper;
    private String manganize;
    private String lead;
    private String nickel;
    private String arsenic;
    private String cadmium;

    public Soil() {
    }

    public Soil(String id, String device_id, String date, String url, String cloud_source, String iron, String zink, String copper, String manganize, String lead, String nickel, String arsenic, String cadmium) {
        this.id = id;
        this.device_id = device_id;
        this.date = date;
        this.url = url;
        this.cloud_source = cloud_source;
        this.iron = iron;
        this.zink = zink;
        this.copper = copper;
        this.manganize = manganize;
        this.lead = lead;
        this.nickel = nickel;
        this.arsenic = arsenic;
        this.cadmium = cadmium;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getDevice_id() {
        return device_id;
    }

    public void setDevice_id(String device_id) {
        this.device_id = device_id;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

    public String getCloud_source() {
        return cloud_source;
    }

    public void setCloud_source(String cloud_source) {
        this.cloud_source = cloud_source;
    }

    public String getIron() {
        return iron;
    }

    public void setIron(String iron) {
        this.iron = iron;
    }

    public String getZink() {
        return zink;
    }

    public void setZink(String zink) {
        this.zink = zink;
    }

    public String getCopper() {
        return copper;
    }

    public void setCopper(String copper) {
        this.copper = copper;
    }

    public String getManganize() {
        return manganize;
    }

    public void setManganize(String manganize) {
        this.manganize = manganize;
    }

    public String getLead() {
        return lead;
    }

    public void setLead(String lead) {
        this.lead = lead;
    }

    public String getNickel() {
        return nickel;
    }

    public void setNickel(String nickel) {
        this.nickel = nickel;
    }

    public String getArsenic() {
        return arsenic;
    }

    public void setArsenic(String arsenic) {
        this.arsenic = arsenic;
    }

    public String getCadmium() {
        return cadmium;
    }

    public void setCadmium(String cadmium) {
        this.cadmium = cadmium;
    }
}
