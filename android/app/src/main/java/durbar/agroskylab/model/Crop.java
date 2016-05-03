package durbar.agroskylab.model;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class Crop {

    private int id;
    private String name;
    private String type;

    public Crop() {
    }

    public Crop(String name, String type) {
        this.name = name;
        this.type = type;
    }

    public Crop(int id, String name, String type) {
        this.id = id;
        this.name = name;
        this.type = type;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }
}
