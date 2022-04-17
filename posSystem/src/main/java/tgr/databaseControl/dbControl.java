package tgr.databaseControl;

import javax.persistence.*;

@Entity
@Table(name="orders")
public class dbControl {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="id")
    private int id;
    @Column(name="orderid")
    private String OrderID;
    @Column(name="lastname")
    private String LastName;
    @Column(name="firstname")
    private String FirstName;
    @Column(name="merchtype")
    private String MerchType;
    @Column(name="merchprice")
    private float MerchPrice;
    @Column(name="orderstatus")
    private String OrderStatus;



    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }
    public String getOrderID() {
        return OrderID;
    }
    public void setOrderID(String orderID) {
        OrderID = orderID;
    }
    public String getLastName() {
        return LastName;
    }
    public void setLastName(String lastName) {
        LastName = lastName;
    }
    public String getFirstName() {
        return FirstName;
    }
    public void setFirstName(String firstName) {
        FirstName = firstName;
    }
    public String getMerchType() {
        return MerchType;
    }
    public void setMerchType(String merchType) {
        MerchType = merchType;
    }
    public float getMerchPrice() {
        return MerchPrice;
    }
    public void setMerchPrice(float merchPrice) {
        MerchPrice = merchPrice;
    }
    public String getOrderStatus() {
        return OrderStatus;
    }
    public void setOrderStatus(String orderStatus) {
        OrderStatus = orderStatus;
    }
    
}
