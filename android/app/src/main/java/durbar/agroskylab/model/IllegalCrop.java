package durbar.agroskylab.model;

/**
 * Created by Osman Goni Nahid on 4/16/2016.
 */
public class IllegalCrop {
    private int id;
    private String name;
    private int iamge;
    private String type;
    private int harmAmount;

    public IllegalCrop() {
    }

    public IllegalCrop(String name, int iamge, String type, int harmAmount) {
        this.name = name;
        this.iamge = iamge;
        this.type = type;
        this.harmAmount = harmAmount;
    }

    public IllegalCrop(int id, String name, int iamge, String type, int harmAmount) {
        this.id = id;
        this.name = name;
        this.iamge = iamge;
        this.type = type;
        this.harmAmount = harmAmount;
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

    public int getIamge() {
        return iamge;
    }

    public void setIamge(int iamge) {
        this.iamge = iamge;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getHarmAmount() {
        return harmAmount;
    }

    public void setHarmAmount(int harmAmount) {
        this.harmAmount = harmAmount;
    }
}
