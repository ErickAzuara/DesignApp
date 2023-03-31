import React,{useState,useEffect} from "react";
import { Button } from "@mui/material";
import constants from "../static/constants";
import Student from "../api/Student";

export default function DestroyButton(props){
    const destroyStudent = () =>{
        Student[constants.destroy](props.serial_number,props.setStudents);
    }
    return(
        <div>
            <Button onClick={destroyStudent} variant="outlined" color="error" >Delete</Button>
        </div>
    );    
}