package kassi;

public class Questao_3 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		for(double f = 1; f <= 100;f++)
		{
			double div = f/3;
			if( (div % 1) == 0 )
				System.out.println(f);
		}
		

	}

}
