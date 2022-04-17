package tgr.databaseControl;

import java.sql.ResultSet;
import java.sql.SQLException;

import org.springframework.jdbc.core.RowMapper;

public class dbRowMapper implements RowMapper<dbControl>
{
    public dbControl mapRow(ResultSet rs, int rowNum) throws SQLException
    {
        dbControl dbControl = new dbControl();
        dbControl.setId(rs.getInt("ID"));
        dbControl.setOrderID(rs.getString("OrderID"));
        dbControl.setLastName(rs.getString("LastName"));
        dbControl.setFirstName(rs.getString("FirstName"));
        dbControl.setMerchType(rs.getString("MerchType"));
        dbControl.setMerchPrice(rs.getFloat("MerchPrice"));
        dbControl.setOrderStatus(rs.getString("OrderStatus"));
        dbControl.setPaymentStatus(rs.getString("PaymentStatus"));
        return dbControl;
    }
}