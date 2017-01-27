package mmpp;

import junit.framework.Test;
import junit.framework.TestCase;
import junit.framework.TestSuite;

/**
 * Unit test for simple App.
 */
public class AppTest
    extends TestCase
{

    /**
     * Rigourous Test :-)
     */
    public void testRun(){
    try{
      App app = new App();
      app.run();
    }catch(Exception e){
      e.printStackTrace();
    }
    }
}
