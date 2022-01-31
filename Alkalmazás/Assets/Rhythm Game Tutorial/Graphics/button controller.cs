using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class buttoncontroller : MonoBehaviour
{
    private SpriteRenderer theSR;
    public Sprite defaultIMG;
    public Sprite pressedImage;

    public KeyCode keyToPress;
    // Start is called before the first frame update
    void Start()
    {
        theSR = GetComponent<SpriteRenderer>();
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(keyToPress)) 
        { 
            theSR.sprite = pressedImage;
        }
    
        if (Input.GetKeyUp(keyToPress))
        {
            theSR.sprite = defaultIMG;
        }
    }
   
}
