//Transform your previously built CLI game into a fully functional Java GUI application using Swing or JavaFX. 
 
import java.util.Scanner; 
 
public class GuessGameCLI {     public static void main(String[] args) {         int numberToGuess = (int)(Math.random() * 100) + 1;         Scanner scanner = new Scanner(System.in); 
        int guess; 
 
        System.out.println("Guess a number between 1 and 100:"); 
         do {             guess = scanner.nextInt();             if (guess < numberToGuess) { 
                System.out.println("Too low!"); 
            } else if (guess > numberToGuess) { 
                System.out.println("Too high!"); 
            } else { 
                System.out.println("Correct!"); 
            } 
        } while (guess != numberToGuess); 
 
        scanner.close(); 
    } 
} 
