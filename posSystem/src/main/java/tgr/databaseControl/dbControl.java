package tgr.databaseControl;

public class dbControl 
{
    private Integer id;
    private String OrderID;
    private String LastName;
    private String FirstName;
    private String MerchType;
    private float MerchPrice;
    private String OrderStatus;
    private String PaymentStatus;

    /*
    public dbControl(int id, String OrderID, String LastName, String FirstName, String MerchType, float MerchPrice, String OrderStatus, String PaymentStatus) 
    {
        this.setId(id);
        this.setOrderID(OrderID);
        this.setLastName(LastName);
        this.setFirstName(FirstName);
        this.setMerchType(MerchType);
        this.setMerchPrice(MerchPrice);
        this.setOrderStatus(OrderStatus);
        this.setPaymentStatus(PaymentStatus);
    }

    public dbControl() {  }*/


    public Integer getId() {
        return id;
    }
    public void setId(Integer id) {
        this.id = id;
    }
    public String getOrderID() {
        return OrderID;
    }
    public void setOrderID(String orderID) {
        this.OrderID = orderID;
    }
    public String getLastName() {
        return LastName;
    }
    public void setLastName(String lastName) {
        this.LastName = lastName;
    }
    public String getFirstName() {
        return FirstName;
    }
    public void setFirstName(String firstName) {
        this.FirstName = firstName;
    }
    public String getMerchType() {
        return MerchType;
    }
    public void setMerchType(String merchType) {
        this.MerchType = merchType;
    }
    public float getMerchPrice() {
        return MerchPrice;
    }
    public void setMerchPrice(float merchPrice) {
        this.MerchPrice = merchPrice;
    }
    public String getOrderStatus() {
        return OrderStatus;
    }
    public void setOrderStatus(String orderStatus) {
        this.OrderStatus = orderStatus;
    }
    public String getPaymentStatus()
    {
        return PaymentStatus;
    }
    public void setPaymentStatus(String paymentStatus)
    {
        this.PaymentStatus = paymentStatus;
    }
    
    @Override
	public String toString()
	{
		return "orders [id=" + id + ", OrderID=" + OrderID + ", LastName=" + LastName + ", FirstName=" + FirstName
				+ ", MerchType=" + MerchType + ", MerchPrice=" + MerchPrice + ", OrderStatus=" +OrderStatus + ", PaymentStatus=" + PaymentStatus + "]";

        //return "orders {" + "id=" + id + ", OrderID='" + OrderID + "' , LastName='" + LastName + "',FirstName= '" + FirstName + "', MerchType='" + 
                //MerchType + "', MerchPrice='" + MerchPrice + "', OrderStatus='" + OrderStatus + ", PaymentStatus='" + PaymentStatus + "'}";
	}
}
