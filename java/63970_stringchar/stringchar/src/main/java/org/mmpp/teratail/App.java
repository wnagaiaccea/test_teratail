package org.mmpp.teratail;
import java.util.*;

/**
 * Hello world!
 *
 */
public class App {
    public  String main(String text){
      Scanner sc = new Scanner(text);
      String l = sc.nextLine().replaceAll(" ", "");
      char[] list = l.toCharArray();
      String type = sc.next();
      String line = sc.next();
      System.out.println(l);
      System.out.println(list);
      System.out.println(type);
      System.out.println(line);
      StringBuffer buf = new StringBuffer();

      if (type.equals("encode")) {
        System.out.println("+ encode +");
          for (int i = 0; i < line.length(); i++) {
              char x = line.charAt(i);
              line = line.replace(x, list[(int) x - 48]);
          }
      } else if (type.equals("decode")) {
        System.out.println("+ decode +");
        buf = new StringBuffer();
          for (int i = 0; i < line.length(); i++) {
              char x = line.charAt(i);
              for (int j = 0; j < 10; j++) {
                  if (x == list[j]) {
                      //line = line.replace(x, (char) j);
                      buf.append((char) j);
                  }
              }
          }

      }
      return (buf.toString());
    }
}
