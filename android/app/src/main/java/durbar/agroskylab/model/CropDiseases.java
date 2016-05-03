package durbar.agroskylab.model;

import java.io.Serializable;
import java.io.StringReader;

/**
 * Created by Osman Goni Nahid on 4/21/2016.
 */
public class CropDiseases implements Serializable {
    private int id;
    private String cropName;
    private String diseasesType;
    private String diseasesDetails;
    public CropDiseases() {
    }

    public CropDiseases(String cropName, String diseasesType, String diseasesDetails) {
        this.cropName = cropName;
        this.diseasesType = diseasesType;
        this.diseasesDetails = diseasesDetails;
    }


    public CropDiseases(int id, String cropName, String diseasesType, String diseasesDetails) {
        this.id = id;
        this.cropName = cropName;
        this.diseasesType = diseasesType;
        this.diseasesDetails = diseasesDetails;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDiseasesType() {
        return diseasesType;
    }

    public String getCropName() {
        return cropName;
    }

    public void setCropName(String cropName) {
        this.cropName = cropName;
    }

    public void setDiseasesType(String diseasesType) {
        this.diseasesType = diseasesType;
    }

    public String getDiseasesDetails() {
        return diseasesDetails;
    }

    public void setDiseasesDetails(String diseasesDetails) {
        this.diseasesDetails = diseasesDetails;
    }
}
