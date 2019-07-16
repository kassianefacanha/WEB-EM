package kassi;
public class Questao_4 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		int i,n;
		for (n = 1; n <= 10; n++){
		int fatorial=1;
		for(i = n; i>=1; i--){
		fatorial = fatorial * i;
		}
		System.out.println(n+"!="+fatorial);
		}
		}

	}


