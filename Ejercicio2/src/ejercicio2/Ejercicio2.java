/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicio2;

import javax.swing.JOptionPane;

/**
 *
 * @author Ricardo Burgos
 */
public class Ejercicio2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int flg=0;
        for (int i = 0; i <=100; i++) {
            flg=flg+i;
        }
        JOptionPane.showMessageDialog(null,flg);
    }
    
}
