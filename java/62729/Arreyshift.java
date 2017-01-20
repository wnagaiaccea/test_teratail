import java.util.*;

public class Arreyshift
{
public static void main(String args[])
{
Scanner scanner= new Scanner(System.in);
System.out.println("Enter the number of slots needs in the array:");
int number = scanner.nextInt();
Random rnd = new Random();

int[] a = new int [number];

for(int i = 0; i < number; i++)
a[i] = rnd.nextInt(100);
System.out.println("This is element of your array" + a[i]);

boolean ok = false;
while(!ok)
{
System.out.println("Enter R/L");
int answer = scanner.nextInt();

if(answer == 'R')
{
System.out.println("Go to Right....");
ok = true;
}
else if(answer == 'L')
{
System.out.println("Go to Left....");
ok = true;
}
else
{
System.out.println("Was not R/L try again");
return;
}
}

System.out.println("How many times?");
int move = scanner.nextInt();

if(answer == 'R')
{
for (int i =0;)
b[(i+move) % b.length] = a[i];
System.out.println(b[i]);
}
if(answer == 'L')
{
for (int i =0;)
b[(i-move) % b.length] =a[i];
System.out.println(b[i]);
}
sc.close();
}

}
