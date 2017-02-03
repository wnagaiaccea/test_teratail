import java.math.*;

public class Main{


	public static void main(String[] args){
		BigDecimal a = new BigDecimal("8");
BigDecimal b = new BigDecimal("8");
BigDecimal c = new BigDecimal("0");

c = a.subtract(b);
c = c.setScale(20, BigDecimal.ROUND_HALF_DOWN);
c = c.stripTrailingZeros();
String result = String.valueOf(c.intValue());
System.out.println(result);

	}
}
