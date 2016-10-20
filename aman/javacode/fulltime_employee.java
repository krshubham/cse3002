import java.util.*;
import java.io.*;
class Employee
{
	int emp_id = 101;
	String name="Aman",gender="Male",city = "Kolkata";
}

class fulltime_employee extends Employee
{
	int salary;
	int units = 7;
	double bonus;
	public void main(String args[])
	{
		
		InputStreamReader read = new InputStreamReader(System.in);
		BufferedReader br = new BufferedReader(read);
		
		fulltime_employee fte = new fulltime_employee();
		System.out.println("Enter the name of the person: ");
		fte.name = br.readLine();
		System.out.println("Enter the id of the Employee: ");
		fte.emp_id = Integer.parseInt(br.readLine());
		System.out.println("Enter the gender of the employee: ");
		fte.gender = br.readLine();
		System.out.println("Enter the city of the Employee: ");
		fte.city = br.readLine();
		System.out.println("Enter the salary fo the Employee");
		fte.salary = Double.parseDouble(br.readLine());
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
