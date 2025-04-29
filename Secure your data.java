//Gain hands-on experience with asymmetric encryption by implementing RSA key generation, encryption, and decryption in Java. 
 
Implementing RSA in Java You’ll need to: 
Generate RSA key pairs 
Encrypt data using the public key 
Decrypt data using the private key 
 
import java.security.KeyPair; import java.security.KeyPairGenerator; import java.security.PrivateKey; import java.security.PublicKey; import java.security.SecureRandom; import java.util.Base64; import javax.crypto.Cipher; 
 
public class RSAExample { 
 
    public static KeyPair generateKeyPair() throws Exception { 
        KeyPairGenerator generator = KeyPairGenerator.getInstance("RSA");         generator.initialize(2048, new SecureRandom());         return generator.generateKeyPair(); 
    } 
 
    public static String encrypt(String plainText, PublicKey publicKey) throws Exception {         Cipher encryptCipher = Cipher.getInstance("RSA");         encryptCipher.init(Cipher.ENCRYPT_MODE, publicKey);         byte[] encryptedBytes = encryptCipher.doFinal(plainText.getBytes());         return Base64.getEncoder().encodeToString(encryptedBytes); 
    } 
 
    public static String decrypt(String encryptedText, PrivateKey privateKey) throws Exception {         Cipher decryptCipher = Cipher.getInstance("RSA");         decryptCipher.init(Cipher.DECRYPT_MODE, privateKey);         byte[] decryptedBytes = decryptCipher.doFinal(Base64.getDecoder().decode(encryptedText));         return new String(decryptedBytes); 
    } 
 
    public static void main(String[] args) { 
        try { 
            KeyPair keyPair = generateKeyPair(); 
            PublicKey publicKey = keyPair.getPublic(); 
            PrivateKey privateKey = keyPair.getPrivate(); 
 
            String message = "Hello RSA Encryption!"; 
            String encrypted = encrypt(message, publicKey); 
            System.out.println("Encrypted message: " + encrypted); 
 
            String decrypted = decrypt(encrypted, privateKey); 
            System.out.println("Decrypted message: " + decrypted); 
 
        } catch (Exception e) { 
            e.printStackTrace(); 
        } 
    } 
} 
