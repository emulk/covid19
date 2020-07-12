import React from "react";
///Set the default User Context value
const UserContext = React.createContext({

    UserName: "",
    FirstName: "",
    LastName: "",
    Token: "",
    Language: "en",
    AutomaticLogOff: true,
    TimeLogOff: 5,

    globalUserRole: "",
    currentPageName: "",
    contextBarTitle: "",
    contextBarMessage: "",

    handleUserName: () => { },
    handleFirstName: () => { },
    handleLastName: () => { },
    handleToken: () => { },
    handleLanguage: () => { },
    handleAutomaticLogOff: () => { },
    handleTimeLogOff: () => { },

    aObjectDataNodes: {},
    changeGlobalUserRole: () => { },
    changeCurrentPageName: () => { },
    handleResetPage: () => { },
    handleEditCustomPage: () => { },
    handleSaveCustomPage: () => { },
    handleDeleteCustomPage: () => { },
    handleContextBarTitle: () => { },
    handleContextBarMessage: () => { },
    handleAddNewUser: () => { },
    handleAObjectDataNodes: () => { }
});

export default UserContext;