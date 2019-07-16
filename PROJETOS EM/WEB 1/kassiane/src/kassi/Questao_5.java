package kassi;

public class Questao_5 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		long i,n;
		for (n = 1; n <= 40;n++){
		long fatorial=1;
		for(i = n; i>=1; i--){
		fatorial = fatorial * i;
		}
		System.out.println(n+"!="+fatorial);
		}
		}
	}


