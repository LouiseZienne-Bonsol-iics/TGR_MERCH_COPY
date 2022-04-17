package tgr.databaseControl;

import javax.persistence.*;

@Entity
@Table(name="orders")
public class dbControl {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private String OrderID;
    private String LastName;
    private String FirstName;
    private String MerchType;
    private float MerchPrice;
    private String OrderStatus;
    private String PaymentStatus;


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
    public String getPaymentStatus()
    {
        return PaymentStatus;
    }
    public void setPaymentStatus(String paymentStatus)
    {
        PaymentStatus = paymentStatus;
    }
    
    @Override
	public String toString()
	{
		return "Employee [id=" + id + ", OrderID=" + OrderID + ", LastName=" + LastName + ", FirstName=" + FirstName
				+ ", MerchType=" + MerchType + ", MerchPrice=" + MerchPrice + ", OrderStatus=" +OrderStatus + ", PaymentStatus=" + PaymentStatus + "]";
	}
}
