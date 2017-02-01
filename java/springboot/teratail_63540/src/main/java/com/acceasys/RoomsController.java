package com.acceasys;

import java.time.LocalDate;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.format.annotation.DateTimeFormat;
import org.springframework.format.annotation.DateTimeFormat.ISO;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import model.ReservableRoom;
import service.RoomService;

@Controller
@RequestMapping("rooms")
public class RoomsController {
  @Autowired
  RoomService roomService;

  @RequestMapping(method=RequestMethod.GET)
  String listRooms(Model model){
    LocalDate today=LocalDate.now();
    List<ReservableRoom> rooms=roomService.findReservableRooms(today);
    model.addAttribute("date", today);
    model.addAttribute("rooms", rooms);
    return "room/listRooms";

  }

  @RequestMapping(value="{date}",method=RequestMethod.GET)
  String listRooms(@DateTimeFormat(iso=ISO.DATE)@PathVariable("date")
    LocalDate date,Model model){
    List<ReservableRoom>rooms=roomService.findReservableRooms(date);
    model.addAttribute("rooms",rooms);
    return"room/listRooms";
  }

}
