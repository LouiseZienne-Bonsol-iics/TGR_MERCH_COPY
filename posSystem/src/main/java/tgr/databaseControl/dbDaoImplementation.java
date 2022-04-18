package tgr.databaseControl;


import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import javax.annotation.PostConstruct;
import javax.sql.DataSource;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.BatchPreparedStatementSetter;
import org.springframework.jdbc.core.support.JdbcDaoSupport;

public class dbDaoImplementation extends JdbcDaoSupport implements dbDao{

    @Autowired
    DataSource dataSource;

    @PostConstruct
    private void initialize()
    {
        setDataSource(dataSource);
    }

    @Override
    public void insertData(dbControl db) 
    {
        String sql = "INSERT INTO orders " + "(id,OrderID,LastName,FirstName,MerchType,MerchPrice,OrderStatus,PaymentStatus) VALUES (?,?,?,?,?,?,?,?)";
        getJdbcTemplate().update(sql, new Object[]{db.getId(),db.getOrderID(),db.getLastName(),db.getFirstName(),db.getMerchType(),db.getOrderStatus(),db.getPaymentStatus()});
    }

    @Override
    public void insertDatas(List<dbControl> dbControls) {
        String sql = "INSERT INTO orders " + "(id,OrderID,LastName,FirstName,MerchType,MerchPrice,OrderStatus,PaymentStatus) VALUES (?,?,?,?,?,?,?,?)";
        getJdbcTemplate().batchUpdate(sql, new BatchPreparedStatementSetter() {
            public void setValues(PreparedStatement ps, int j) throws SQLException
            {
                dbControl db = dbControls.get(j);
                ps.setInt(1, db.getId());
                ps.setString(2, db.getOrderID());
                ps.setString(3, db.getLastName());
                ps.setString(4, db.getFirstName());
                ps.setString(5, db.getMerchType());
                ps.setFloat(6, db.getMerchPrice());
                ps.setString(7, db.getOrderStatus());
                ps.setString(8, db.getPaymentStatus());
            }

            @Override
            public int getBatchSize() {
                return dbControls.size();
            }
        });
    }

    @Override
    public List<dbControl> getAllData() {
        String sql = "SELECT * FROM orders";
        List<Map<String, Object>> rows = getJdbcTemplate().queryForList(sql);

        List<dbControl> result = new ArrayList<dbControl>();
        for(Map<String,Object> row:rows)
        {
            dbControl db = new dbControl();
            db.setId((int)row.get("id"));
            db.setOrderID((String)row.get("OrderID"));
            db.setLastName((String)row.get("LastName"));
            db.setFirstName((String)row.get("FirstName"));
            db.setMerchType((String)row.get("MerchType"));
            db.setMerchPrice((float)row.get("MerchPrice"));
            db.setOrderStatus((String)row.get("OrderStatus"));
            db.setPaymentStatus((String)row.get("PaymentStatus"));
            result.add(db);
        }
        return result;

    }

    
}
