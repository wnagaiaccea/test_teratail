package org.mmpp.teratail;

import junit.framework.Test;
import junit.framework.TestCase;
import junit.framework.TestSuite;
import static junit.framework.Assert.*;
/**
 * Unit test for simple App.
 */
public class AppTest extends TestCase{

    public void testMain(){
      App app = new App();
        assertEquals("7240",app.main("8 3 7 1 2 5 6 0 9 4 \ndecode \n0728"));
    }
}
