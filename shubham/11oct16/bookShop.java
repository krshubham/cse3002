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
        int idToFind, copies;
        Scanner sc = new Scanner(System.in);
        bookShop bs = new bookShop();
        Book[] arr = new Book[3];
        arr[0] = new Book("Aman","Maths","Das",321,2,105.25);
        arr[1] = new Book("Halliday","Physics","R&D",322,1,670);
        arr[2] = new Book("Das Gupta","Biology","Bhubh",323,0,315);
        System.out.println("Enter the id of the book: ");
        idToFind = sc.nextInt();
        System.out.println("Enter the number of copies: ");
        copies = sc.nextInt();
        for(int i=0;i<3;i++){
            if(arr[i].id==idToFind && arr[i].numOfCopies>=copies){
                System.out.println("Yes the copies are available");
                System.out.println("The Total Cost is: "+ arr[i].price*copies);
            }
        }
    }
}
