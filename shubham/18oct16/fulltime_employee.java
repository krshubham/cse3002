import java.util.*;

class Employee{
	int emp_id = 123;
	String name="Shubham",gender="Male",city = "Chandigarh";
}

public class fulltime_employee extends Employee{
	int salary;
	int units = 7;
	double bonus;
	public static void main(String args[]){
		//instantiate the scanner class for taking the input
		Scanner sc = new Scanner(System.in);
		//instantiate the class as fte.
		fulltime_employee fte = new fulltime_employee();
		System.out.println("Enter the name of the person: ");
		fte.name = sc.next();
		System.out.println("Enter the id of the Employee: ");
		fte.emp_id = sc.nextInt();
		System.out.println("Enter the gender of the employee: ");
		fte.gender = sc.next();
		System.out.println("Enter the city of the Employee: ");
		fte.city = sc.next();
		System.out.println("Enter the salary fo the Employee");
		fte.salary = sc.nextInt();
		if(fte.salary<5000 && fte.units>10){
			fte.bonus = 0.25*fte.salary;
		}
		else if(fte.salary<10000 && fte.units > 5){
			fte.bonus = 0.30*fte.salary;
		}
		else{
			fte.bonus = 0.1*fte.salary;
		}
		System.out.println("The id of the Employee is :"+fte.emp_id);
		System.out.println("The nameof the employee is: "+fte.name);
		System.out.println("The gender of the employee is: "+fte.gender);
		System.out.println("The city of the employee is: "+fte.city);
		System.out.println("The bonus of the person is: "+fte.bonus);
	}
}
