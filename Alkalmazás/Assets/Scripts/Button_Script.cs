using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Button_Script : MonoBehaviour
{
    private SpriteRenderer theSR;
    public Sprite defaultImage;
    public Sprite pressedImage;

    public string inputName;
    // Start is called before the first frame update
    void Start()
    {
        theSR = GetComponent<SpriteRenderer>();
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetButtonDown(inputName))
        {
            theSR.sprite = pressedImage;
        }
        if (Input.GetButtonUp(inputName))
        {
            theSR.sprite = defaultImage;
        }

    }
}
