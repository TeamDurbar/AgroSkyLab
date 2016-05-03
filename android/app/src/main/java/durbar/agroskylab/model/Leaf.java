package durbar.agroskylab.model;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class Leaf {
    private int id;
    private String name;
    private int image;
    private String threat;

    public Leaf() {
    }

    public Leaf(String name, int image, String threat) {
        this.name = name;
        this.image = image;
        this.threat = threat;
    }

    public Leaf(int id, String name, int image, String threat) {
        this.id = id;
        this.name = name;
        this.image = image;
        this.threat = threat;
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

    public int getImage() {
        return image;
    }

    public void setImage(int image) {
        this.image = image;
    }

    public String getThreat() {
        return threat;
    }

    public void setThreat(String threat) {
        this.threat = threat;
    }
}
