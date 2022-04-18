package tgr.databaseControl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
@Transactional
public class dbServiceImplementation implements dbService{

    @Autowired
    private dbRepository dbRepository;

    @Override
    public List<dbControl> getData() 
    {
        return dbRepository.getData();
    }

    
}
