package teratail;
import org.newdawn.slick.AppGameContainer;
import org.newdawn.slick.BasicGame;
import org.newdawn.slick.GameContainer;
import org.newdawn.slick.Graphics;
import org.newdawn.slick.Image;
import org.newdawn.slick.Input;
import org.newdawn.slick.SlickException;
import org.newdawn.slick.Sound;
import org.newdawn.slick.SpriteSheet;

import org.lwjgl.LWJGLException;
import org.lwjgl.opengl.Display;
import org.lwjgl.opengl.DisplayMode;


public class Main extends BasicGame {
        Sound[] se = new Sound[5];
    public Main(String title) {
        super(title);
    }

    @Override
    public void init(GameContainer gc) throws SlickException {

        se[0] = new Sound("attack.wav");
    }
    @SuppressWarnings("static-access")
    @Override
    public void update(GameContainer gc, int delta) throws SlickException {

        Input input = gc.getInput();
        if (input.isKeyDown(input.KEY_LEFT)) {
            se[0].play();
        }
    }
    @Override
    public void render(GameContainer gc, Graphics g) throws SlickException {

    }

    public void exe(){
      // try{
      //   Main main = new Main("attack.wav");
      //   AppGameContainer app = new AppGameContainer(main);
      //   app.setDisplayMode(640, 400, false);
      //   app.start();
      // }catch(Exception e){
      //   e.printStackTrace();
      // }
      try {
          Display.setDisplayMode(new DisplayMode(800, 600));
          Display.create();
          Display.setTitle("Test");

          while(!Display.isCloseRequested()) {
              Display.update();
          }

          Display.destroy();
      } catch(LWJGLException e) {
          e.printStackTrace();
      }
    }
}
