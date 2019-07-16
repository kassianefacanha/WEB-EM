package kassi;

import javax.swing.JOptionPane;

public class Questao_7 {

	/**
	 * @param args
	 */
	public static void main(String[] args){
	int x;int par,imp;
	x = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero:"));

			if( (x % 2) == 0 ){
				par = x/2;
				System.out.print(" -> ");
			    System.out.println(par);
			    while ( par <= 1){
			    if((par % 2)== 0){ 
			    	par = x/2;
					System.out.print(" -> ");
				    System.out.println(par);
			    return;
			    }else {
			    	par = 3 * x + 1;	
			    	System.out.print(" -> ");
				    System.out.println(par);
				 
			    }
			    } return;}	
			 
			else {
				imp = 3 * x + 1;
				while(imp > 1){
				 if((imp % 2)== 0){ 
				    	par = x/2;
						System.out.print(" -> ");
					    System.out.println(imp);
				    	return;
				    }else {
				    	imp = 3 * x + 1;	
				    	System.out.print(" -> ");
					    System.out.println(imp);
					    
				    
				    }}}  return;}}
			
			
		
			
		



