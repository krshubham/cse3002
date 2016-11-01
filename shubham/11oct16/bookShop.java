import java.util.*;
import java.io.*;

class Book{
    String author,title,publisher;
    int id,numOfCopies;
    double price;
    Book(){
        
    }
    Book(String a,String b,String c,int d,int e,double f){
        this.author = a;
        this.title = b;
        this.publisher = c;
        this.id = d;
        this.numOfCopies = e;
        this.price = f;
    }
}

public class bookShop extends Book{
    public static void main(String args[]){
        int find, copies;
        Scanner sc = new Scanner(System.in);
        bookShop bs = new bookShop();
        Book[] arr = new Book[4];
        arr[0] = new Book("H.C. Verma","Concepts of Physics","Das",1,2,215.25);
        arr[1] = new Book("Halliday","Modern Physics","R&D",2,1,670);
        arr[2] = new Book("Sumita Arora","Let Us C","Bhubh",3,3,315);
        arr[3] = new Book("Sumita Arora","Let Us C++","Bhubh",4,0,350);
        System.out.println("Enter the id of the book: ");
        find = sc.nextInt();
        System.out.println("Enter the number of copies: ");
        copies = sc.nextInt();
        for(int i=0;i<4;i++){
            if(arr[i].id==find && arr[i].numOfCopies>=copies){
                System.out.println("Yes the copies are available");
                System.out.println("The Total Cost is: "+ arr[i].price*copies);
            }
        }
    }
}
