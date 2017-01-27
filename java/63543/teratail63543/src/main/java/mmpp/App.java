package mmpp;

import java.io.*;
import net.arnx.jsonic.*;

/**
 * Hello world!
 *
 */
public class App {
    public static void main( String[] args ) throws Exception{
      (new App()).run();
    }

    public static String readAll(String path) throws IOException {
        StringBuilder builder = new StringBuilder();
        BufferedReader reader = null;
        try{
            reader = new BufferedReader(new FileReader(path));
            String string = reader.readLine();
            while (string != null){
                builder.append(string + System.getProperty("line.separator"));
                string = reader.readLine();
            }
        }finally{

        }

        return builder.toString();
    }

    public void run() throws Exception{
      ClassLoader classLoader = getClass().getClassLoader();
      String json = readAll(classLoader.getResource("json.json").getPath());
      Data data = JSON.decode(json, Data.class);
      for( DataElement element : data.data){
        if(element.source == 35 && element.target == 36){
            System.out.println(JSON.encode(element));
        }
      }
    }
}
class Data {
    public java.util.List<DataElement> data;
}

class DataElement {

  public int source;
  public int via0;
  public int via1;
  public int target;
  public int cost;

}
