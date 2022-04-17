package tgr.databaseControl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
@Transactional

public class dbServiceImplementation implements dbService{
    @Autowired
    dbRepository dbRepository;

    @Override
    public List<dbControl> getAlldata() 
    {
        return (List<dbControl>) dbRepository.findAll();
    }

    @Override
    public dbControl getDataById(int id)
    {
        return dbRepository.findById(id).get();
    }

    @Override
    public void addData(dbControl dbControl)
    {
        dbRepository.save(dbControl);
    }

    @Override 
    public void deleteData(int id)
    {
        dbRepository.deleteById(id);
    }
}
