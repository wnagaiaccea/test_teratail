import java.util.Scanner;
import java.util.regex.Pattern;

public class Main {
    public static void main(String[] args) {
        // 自分の得意な言語で
        // Let's チャレンジ！！
        Scanner sc = new Scanner(System.in);
        String ipNum = sc.nextLine();
        int ipNumInt = Integer.parseInt(ipNum);

StringBuffer buf = new StringBuffer();
        //以下、ip判別ルーチン

        for(int i = 0; i < ipNumInt; i++){

            boolean ipFlag = true;

            String ip = sc.nextLine();
            String[] address = ip.split("\\.");

            if (address.length != 4) {
                ipFlag = false;
                buf.append("False\n");
            }

            if(ipFlag){
                for(String a : address){
                    try {
                        int b = Integer.parseInt(a);
                        if (b < 0 || 255 < b){
                            buf.append("False\n");
                        }
                    } catch (NumberFormatException e) {
                        ipFlag = false;
                        buf.append("False\n");
                        break;
                    }
                }
                if(ipFlag){
                    buf.append("True\n");
                }
            }
        }
        System.out.print(buf.toString());
    }
}
