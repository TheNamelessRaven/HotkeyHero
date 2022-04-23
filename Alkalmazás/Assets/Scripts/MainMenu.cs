using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
public class MainMenu : MonoBehaviour
{
    bool login = false;
    AudioSource theMusic;
    int soundv = 100;
    public void ExitBtn()
    {
        Application.Quit();
        Debug.Log("Game Closed");
    }
    public void TutorialBtn()
    {
        SceneManager.LoadScene("Game-Tutorial");
    }
    public void StartBtn()
    {
        Debug.Log("A játék elindult! ");
    }
    public void Level1()
    {
        SceneManager.LoadScene("Game-Level 1");
    }
    public void Level2()
    {
        SceneManager.LoadScene("Game-Level 2");
    }
    public void Level3()
    {
        SceneManager.LoadScene("Game-Level 3");
    }
    
    private void Update()
    {
        
}
}
