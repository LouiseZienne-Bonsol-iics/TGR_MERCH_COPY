package tgr.databaseControl;

import javax.persistence.*;

@Entity
@Table(name = "orders")
public class dbControl {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column
    private String OrderID;
    @Column
    private String LastName;
    @Column
    private String FirstName;
    @Column
    private String MerchType;
    @Column
    private float MerchPrice;
    @Column
    private String OrderStatus;

    public dbControl(){}
    
    public dbControl(Long id, String OrderID, String LastName, String FirstName, String MerchType, float MerchPrice, String OrderStatus) 
    {
        this.id = id;
        this.LastName = LastName;
        this.FirstName = FirstName;
        this.MerchType = MerchType;
        this.MerchPrice = MerchPrice;
        this.OrderStatus = OrderStatus;
    }

    public Long getId() {
        return id;
    }
    public void setId(Long id) {
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
