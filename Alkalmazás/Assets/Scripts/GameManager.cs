using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class GameManager : MonoBehaviour
{
    // Start is called before the first frame update
    bool pause=true;
    public AudioSource theMusic;
    public bool Play;
    public bool Started=false;
    public BeatScroller beatTempo;
    public static GameManager instance;
    public int Score;
    public int Hitscore = 100;
    public GameObject pauseScreen;
    public GameObject resultScreen;
    public Text finalScore;
    public float totalnotes;
    public Text scoreText;
    public Text multi;

    public int missedbutton = 0;
    public int currentMulti;
    public int multiTracer;
    public int[] multiTresholds;
    void Start()
    {
        instance = this;
        scoreText.text = "Score:0";
        currentMulti = 1;
        Score = 0;
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(KeyCode.Escape))
        {
            PauseGame();
            Debug.Log("Pause");
        }

        if (Input.GetKeyDown(KeyCode.Tab))
        {
            ResumeGame();
        }
        if (Input.GetKeyDown(KeyCode.Space))
        {
            SceneManager.LoadScene("Game-Menu");
        }
        if (!Play)
        {
            if (Input.anyKeyDown)
            {
                Started = true;
                theMusic.Play();

            }
            if (Started)
            {
                if(theMusic.isPlaying)
                {
                    Play = true;
                    beatTempo.Started = true;
                    Debug.Log("Zene");
                   
                }
            }
            
            }
        else
        {
                if (!theMusic.isPlaying && !resultScreen.activeInHierarchy)
                {
                    Started = false;
                if (pause = false)
                {
                    resultScreen.SetActive(true);
                    finalScore.text = "" + Score;
                    SceneManager.LoadScene("Game-Menu");
                }
                }
            
        }

    }

    public void NoteHit()
    {
        Debug.Log("Siker!");
        Score += Hitscore * multiTresholds[currentMulti - 1];
        multi.text = "Multiplier: " + multiTresholds[currentMulti - 1] + "x";
        scoreText.text = "Score: " + Score;
        if (currentMulti  < multiTresholds.Length)
        {
            multiTracer++;
            currentMulti++;
            /*if (multiTresholds[currentMulti - 1] <= multiTracer)
            {
                currentMulti = 0;
                currentMulti++;
            }*/
        }
       
    }
    public void NoteMissed()
    {
        
        Debug.Log("Sikertelen :(");
        Score -= Hitscore;
        currentMulti = 1;
        multi.text = "Multiplier: " + currentMulti + "x";
        scoreText.text = "Score: " + Score;
       
       
    }
    public void ButtonMissed()
    {
        missedbutton += 1;
        Score -= 50;
        scoreText.text = "Score: " + Score;
        currentMulti = 1;
    }
    public void PauseGame()
    {
        
        pauseScreen.SetActive(true);
        Time.timeScale = 0;
        pause = true;
        theMusic.Pause();
    }
    public void ResumeGame()
    {
        pauseScreen.SetActive(false);
        Time.timeScale = 1;
        theMusic.Play();
        pause = false;
    }
}