package tgr;
//package posSystem.src.main.merch;


//package TGR.posSystem;

//import javax.persistence.Entity;
//import javax.persistence.GeneratedValue;
//import javax.persistence.GenerationType;
//import javax.persistence.Id;

//import javax.persistence.*;

//@Entity
public class order 
{
    //@Id
    //@GeneratedValue(strategy = GenerationType.AUTO)
    private int id;
    private String OrderID;
    private String LastName;
    private String FirstName;
    private String MerchType;
    private float MerchPrice;
    private String OrderStatus;

    public order(int id, String OrderID, String LastName, String FirstName, String MerchType, float MerchPrice, String OrderStatus) {
        this.setId(id);
        this.setOrderID(OrderID);
        this.setLastName(LastName);
        this.setFirstName(FirstName);
        this.setMerchType(MerchType);
        this.setMerchPrice(MerchPrice);
        this.setOrderStatus(OrderStatus);
    }

    public order() {  }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getOrderID() {
        return OrderID;
    }

    public void setOrderID(String OrderID) {
        this.OrderID = OrderID;
    }

    public String getLastName() {
        return LastName;
    }

    public void setLastName(String LastName) {
        this.LastName = LastName;
    }

    public String getFirstName() {
        return FirstName;
    }

    public void setFirstName(String FirstName) {
        this.FirstName = FirstName;
    }

    public String getMerchType() {
        return MerchType;
    }

    public void setMerchType(String MerchType) {
        this.MerchType = MerchType;
    }

    public float getMerchPrice() {
        return MerchPrice;
    }

    public void setMerchPrice(float merchPrice2) {
        this.MerchPrice = merchPrice2;
    }

    public String getOrderStatus() {
        return OrderStatus;
    }

    public void setOrderStatus(String OrderStatus) {
        this.OrderStatus = OrderStatus;
    }

    
    /*public String getPaymentStatus()
    {
        return PaymentStatus;
    }
    public void setPaymentStatus(String paymentStatus)
    {
        PaymentStatus = paymentStatus;
    }*/

    @Override
    public String toString() {

        return "order{" + "id=" + id + ", OrderID='" + OrderID + "' , LastName='" + LastName + "',FirstName= '" + FirstName + "', MerchType='" + MerchType + "', MerchPrice='" + MerchPrice + "', OrderStatus='" + OrderStatus + "'}";
    }
}